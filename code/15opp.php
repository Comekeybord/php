<?php
//类
//对象


//创建一个类
class Person
{
    //跟c++类似
    # 属性
    private $name = "zs";
    private $email = "zs@gmail.com";
    # 方法
    //设置名字方法
    public function setName($name)
    {
        // 哪个对象调用函数 this就指向哪个对象
        $this->name = $name;
    }
    //获取名字方法
    public function getName()
    {
        return $this->name;
    }
    //设置邮箱方法
    public function setEmail($email)
    {
        // 哪个对象调用函数 this就指向哪个对象
        $this->email = $email;
    }
    //获取邮箱方法
    public function getEmail()
    {
        return $this->email;
    }

    # 构造函数：实例化就调用
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    # 析构函数：对象销毁时执行
    public function __destruct()
    {
        // echo __CLASS__ . "被销毁了";
    }
}

//实例化对象
// $person1 = new Person("Henry", "Henry@gmail.com");
// // $person1->setName("李四");
// echo $person1->getName();
// echo '<br>';
// // $person1->setEmail("ls@gmail.com");
// echo $person1->getEmail();
// echo '<hr>';
// $person2 = new Person("Jack", "Jack@gmail.com");
// echo $person2->getName() . '<br>';
// echo $person2->getEmail();

class Customers extends Person
{
    //可以继承Person类的public 和 protected 属性与方法(直接调用)
    //工资
    private $salary = 3000;
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    //构造函数
    public function __construct($name, $email, $salary)
    {
        //调用父级构造函数
        parent::__construct($name, $email);
        $this->salary = $salary;
    }
}

//先在子类中寻找构造函数 如果没有就用父类的构造函数
$customer1 = new Customers(
    "liuxing",
    "liuxing@gmail.com",
    1000
);
echo $customer1->getName() . '<br>';
echo $customer1->getSalary();
echo '<hr>';
$customer2 = new Customers("飒沓如", "sataru@gmail.com", 32564);
echo $customer2->getSalary();
